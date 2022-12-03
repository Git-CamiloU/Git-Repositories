from itertools import count


tupla = ('Esto', 'es', 'una', 'tupla')
print (tupla)
print (type(tupla))
print (tupla.count('es'))
print (tupla.count('Esto'))
print (tupla[2])
lista = list(tupla)
lista.append('Dato agregado')
print (lista)