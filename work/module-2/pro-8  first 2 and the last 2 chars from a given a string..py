def get_first_and_last_chars(s):
    if len(s) < 2:
        return ""
    else:
        return s[:2] + s[-2:]

input_string = "pythonprogramming"
result = get_first_and_last_chars(input_string)
print("Result:", result)
