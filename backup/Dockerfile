FROM mysql:8.0-debian

COPY ./backup.sh /etc/backup/backup.sh
RUN chmod a+x /etc/backup/backup.sh

ENTRYPOINT ["/etc/backup/backup.sh"]