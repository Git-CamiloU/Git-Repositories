#Número de vocales en una palabra

palabra = input('Ingrese una palabra: ')

def numVocales(palabra):
    vocal = 0
    for x in palabra:
        y = x.lower()
        if y == "a" or y == "e" or y == "i" or y == "o" or y == "u":
            vocal += 1
    return vocal

print('El número de vocales es: ', numVocales(palabra))