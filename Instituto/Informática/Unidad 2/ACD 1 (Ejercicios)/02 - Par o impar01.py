#Par o impar
n = int(input('Ingrese un número: '))
def par(n):
    if n%2 == 0:
        return f"Es par"
    else:
        return f"Es impar"
print(par(n))