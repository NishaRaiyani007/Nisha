def check_values(a, b):
    return a == b or a + b == 5 or abs(a - b) == 5

value1 = int(input("first integer: "))
value2 = int(input("second integer: "))

result = check_values(value1, value2)

print(f"The result is: {result}")
