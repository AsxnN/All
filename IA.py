import numpy as np

def digmoid(x):
    return 1/(1 + np.exp(-x))

def sigmoid_derivada(x):
    return x * (1 - x)


entradas = np.array([[0,0],[0,1],[1,0],[1,1]])
salidas_esperadas = np.array([[0],[1,],[1],[1]])

np.random.seed(42)
pesos = np.random.rand(2,1)
print(pesos)

learning_rate = 0.1
epochs = 10000

for epoch in range (epochs):
    entrada_ponderada = np.dot(entradas.pesos) + bias
    salida = sigmoid(entrada_ponderada)

    error = salidas_esperadas - salida
    
    ajuste = error * sigmoid_derivada(salida)


    pesos += np.dot(entradas.T, ajuste) * learning_rate
    bias += np.sum(ajuste) * learning_rate

    if epoch % 1000 ==0:
        print(f"Epoca {epoch},Error: {np.mean(np.abs(error))}")