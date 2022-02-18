#!/bin/bash

case "$1" in
  new)
    case "$2" in
      project)
        docker compose exec composer composer global exec phing
      ;;
      *)
        ./calmvoyce.sh create
      ;;
    esac
    ;;
  database)
    cert_generate
    ;;
  install)
    cert_install
    ;;
  *)
    cat << EOF

Create commands.

Usage:
    calmvoyce create <command>

Available commands:
    new project .................................. Create a project using the calmvoyce template
    install ................................... Install the certificate

EOF
    ;;
esac