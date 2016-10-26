
echo "#directories" > ./dirs.sql
echo "SET @EXPORT_DIR = '${PWD}';" >> ./dirs.sql

cat ./dirs.sql > ./export.sql
cat ./01_google-interview.sql >> ./export.sql

