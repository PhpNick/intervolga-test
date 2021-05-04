SELECT * FROM a, b WHERE a.id=b.a_id;
выводит строки из обеих таблиц, в которых совпадают значения столбцов a.id и b.a_id.
SELECT * FROM a JOIN b ON a.id=b.a_id;
делает то же самое.