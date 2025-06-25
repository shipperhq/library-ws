{
  inputs = {
    nixpkgs.url = "github:cachix/devenv-nixpkgs/rolling";
    devenv = {
      url = "github:cachix/devenv";
      inputs = {nixpkgs.follows = "nixpkgs";};
    };
    flake-utils.url = "github:numtide/flake-utils";
  };

  nixConfig = {
    extra-trusted-public-keys = "devenv.cachix.org-1:w1cLUi8dv3hnoSPGAuibQv+f9TZLr6cv/Hm9XgU50cw=";
    extra-substituters = "https://devenv.cachix.org";
  };

  outputs = {
    self,
    nixpkgs,
    devenv,
    flake-utils,
    ...
  } @ inputs:
    flake-utils.lib.eachDefaultSystem (
      system: let
        inherit (inputs.nixpkgs) lib;
        pkgs = import nixpkgs {
          inherit system;
        };
      in {
        packages = {
          devenv-up = self.devShells.${system}.default.config.procfileScript;
          devenv-test = self.devShells.${system}.default.config.test;
        };

        devShells = {
          default = devenv.lib.mkShell {
            inherit inputs pkgs;
            modules = [
              ({
                pkgs,
                config,
                ...
              }: {
                name = "library-ws";

                packages = with pkgs; [
                  jq
                  php82Packages.composer
                  openssl
                ];

                languages.php = {
                  enable = lib.mkDefault true;
                  version = lib.mkDefault "8.2";

                  ini = ''
                    memory_limit = 2G
                    display_errors = On
                    error_reporting = E_ALL
                    zend.assertions = -1
                    opcache.memory_consumption = 256M
                    opcache.interned_strings_buffer = 20
                    short_open_tag = 0
                    zend.detect_unicode = 0
                    extension_dir=${pkgs.php82.extensions.openssl}/lib/php/extensions
                  '';
                };

                tasks."env:setup" = {
                  exec = ''
                    if [ ! -f .env ] && [ -f .env.example ]; then
                      echo "Creating .env file from .env.example..."
                      cp .env.example .env
                    fi
                  '';
                  before = ["devenv:enterShell"];
                };

                tasks."composer:install" = {
                  exec = "composer install";
                  before = ["devenv:enterShell"];
                };

                pre-commit.hooks = {
                  alejandra.enable = true;
                };
              })
            ];
          };
        };
      }
    );
}
