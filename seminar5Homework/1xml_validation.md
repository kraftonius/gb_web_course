<req>

        <surname>Иванов</surname>

        <name>Иван</name>

        <patronymic>Иванович</patronymic>

        <birthdate>01.01.1990</birthdate>

        <birthplace>Москва</birthplace>

        <phone>8 926 766 48 48</phone>

</req

1. Строка 15, не закрыта скобка ">" закрывающего тега 
2. Не нужны пустые строки между параметрами, тегами
3. Добавить вначале строку с XML декларацией
<?xml version="1.0" encoding="windows-1251"?>

ИСПРАВЛЕНО:

<?xml version="1.0" encoding="windows-1251"?>
<req>
	<surname>Иванов</surname>
	<name>Иван</name>
	<patronymic>Иванович</patronymic>
	<birthdate>01.01.1990</birthdate>
	<birthplace>Москва</birthplace>
	<phone>8 926 766 48 48</phone>
</req>
