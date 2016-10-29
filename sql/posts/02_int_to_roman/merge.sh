
echo "#directories" > ./dirs.sql
echo "SET @EXPORT_DIR = '${PWD}';" >> ./dirs.sql

cat ./dirs.sql > ./export.sql
cat ./02_int_to_romans.sql >> ./export.sql

