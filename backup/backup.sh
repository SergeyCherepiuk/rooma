#!/bin/sh

# Usage: ./backup.sh localhost 3306 root secret rooma /opt/mysql/backup

GZIP=$(which gzip)
HOST=$1
PORT=$2
USER=$3
PASSWORD=$4
DB_DATABASE=$5
BACKUP_FOLDER=$6
FILE=${BACKUP_FOLDER}/backup-$(date +"%Y_%m_%d_%H_%M_%S").sql.gz

mysqldump --host $HOST --port $PORT -u$USER -p$PASSWORD $DB_DATABASE | $GZIP -9 > $FILE
sleep 60