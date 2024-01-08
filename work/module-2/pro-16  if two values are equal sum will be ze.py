def calculate_sum(num1, num2, num3):
    if num1 == num2 or num2 == num3 or num1 == num3:
        return 0
    else:
        return num1 + num2 + num3

num1 = int(input("first integer: "))
num2 = int(input("second integer: "))
num3 = int(input("third integer: "))

result = calculate_sum(num1, num2, num3)
print(f"The sum of the three integers is: {result}")
