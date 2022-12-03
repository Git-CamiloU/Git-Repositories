#Calcular volumen
def calcularVolumen(r):
    return 4/3 * 3.14 * r ** 3

n = int(input('Ingrese un número: '))
resultado = calcularVolumen(n)
print(resultado)