#Mayor o menor de edad
def esMayor(usuario):
    if usuario.edad > 17:
        return f"mayor de edad"
    else:
        return f"menor de edad"

class Usuario:

    def __init__(self, edad):
        self.edad = edad

e1 = int(input('Ingrese la edad del primer usuario: '))
e2 = int(input('Ingrese la edad del segundo usuario: '))
usuario1 = Usuario(e1)
usuario2 = Usuario(e2)

resultado1 = esMayor(usuario1)
resultado2 = esMayor(usuario2)

print('El primer usuario es: ', resultado1)
print('El segundo usuario es: ', resultado2)