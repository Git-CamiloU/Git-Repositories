#El menor
lista = []
inicio = int(1)
n = int(0)
pos = int(0)
n = int(input ('Ingrese el número de elementos: '))

for inicio in range (n):
    to_insert = input('Ingrese un valor: ')
    lista.insert (pos, to_insert)
    pos = pos + 1
    
menor = "init"
for x in lista:
    if menor == "init" or menor > x:
        menor = x
    elif menor < x:
        menor = menor
print(lista)
print('El menor de la lista es: ', menor)