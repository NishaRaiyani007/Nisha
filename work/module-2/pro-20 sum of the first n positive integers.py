def sum_of_first_n_integers(n):
    if n < 1:
        return "Please enter a positive integer."
    else:
        return sum(range(1, n+1))

n = int(input("Enter a positive integer (n): "))
result = sum_of_first_n_integers(n)

print(f"The sum of the first {n} positive integers is: {result}")
