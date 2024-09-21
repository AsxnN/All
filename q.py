
cadena = input("Introduce una cadena de texto: ")
conteo_vocales = 0

vocales = "aeiou"

for caracter in cadena:
    if caracter in vocales:
        conteo_vocales += 1

print(f"La cadena contiene {conteo_vocales} vocales.")
