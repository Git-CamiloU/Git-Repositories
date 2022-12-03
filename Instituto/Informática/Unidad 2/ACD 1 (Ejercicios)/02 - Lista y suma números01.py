#Recibir una cantidad infinita de números hasta escribir basta, luego sumarlos

suma = 0

while True:
    num = int(input('Ingrese un número: '))
    suma = int(suma + num)
    if num != int(num) or num == 'basta':
        break

print('La suma de los números ingresados es: ', suma)