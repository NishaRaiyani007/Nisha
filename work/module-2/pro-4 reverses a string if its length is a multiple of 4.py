def reverse_string_if_multiple_of_4(s):
    if len(s) % 4 == 0:
        return s[::-1]
    else:
        return s

input_string = "abcdefgh"
result = reverse_string_if_multiple_of_4(input_string)
print("Result:", result)
