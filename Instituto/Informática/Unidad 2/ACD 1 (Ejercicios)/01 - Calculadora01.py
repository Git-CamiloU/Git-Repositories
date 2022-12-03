#Calculadora 1
primerNumero = input("Ingrese el primer número: ")

try:
    primero = int(primerNumero)
except:
    primero = "Cadena"

segundoNumero = input("Ingrese el segundo número: ")

try:
    segundo = int(segundoNumero)
except:
    segundo = "Cadena"

if primero == "Cadena" or segundo == "Cadena":
    print("Ingreso mal un dato, pruebe por favor una vez mas ingresando numeros")
else:
    print(primero + segundo)