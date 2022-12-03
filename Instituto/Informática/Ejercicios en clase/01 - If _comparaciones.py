##Ejercicios comparaciones
from ctypes.wintypes import PINT

#Comparaciones.
#print (2 == 2)
#print (3 != 2)
#print (500 > 300)


#Crear programa que indique que una persona es mayor o menor de edad (ELIF).
#edad = int (input ('Por favor digite su edad: '))
#if (edad) > 17:
#    print ('Usted tiene', edad, 'años, ''usted es mayor de edad')
#elif edad < 17: 
#    print('Usted tiene', edad, 'años''usted es menor de edad')


##Crear un programa que lea la nota e indique si es insuficiente, aceptable, muy bueno o exelente (AND), (ELSE).
nota = float (input ('Ingrese la nota: '))
if nota <= 10 and nota >= 9:
    print ('La nota es excelente')
elif nota < 9 and nota >= 8:
    print ('La nota es muy buena')
elif nota < 8 and nota >= 6:
    print ('La nota es aceptable')
elif nota < 6 and nota >= 0:
    print ('La nota es insuficiente')
else: print('Su nota no está en los rangos permitidos')