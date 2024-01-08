def swap_with_temp(a, b):
    temp = a
    a = b
    b = temp
    return a, b
num1 = 5
num2 = 10
print("Before swapping: num1 =", num1, ", num2 =", num2)

num1, num2 = swap_with_temp(num1, num2)

print("After swapping with temp variable: num1 =", num1, ", num2 =", num2)
