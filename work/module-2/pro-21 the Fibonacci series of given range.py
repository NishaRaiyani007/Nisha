def generate_fibonacci_series(start, end):
    fibonacci_series = []
    a, b = 0, 1

    while a <= end:
        if a >= start:
            fibonacci_series.append(a)
        a, b = b, a + b

    return fibonacci_series
start_range = int(input("starting range:"))
end_range = int(input("ending range:"))

fibonacci_result = generate_fibonacci_series(start_range, end_range)

print("Fibonacci series within the range of", start_range, "to", end_range, "is:", fibonacci_result)
