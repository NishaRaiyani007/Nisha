def insert_in_middle(original_str, to_insert):
    middle_index = len(original_str) // 2
    result_str = original_str[:middle_index] + to_insert + original_str[middle_index:]
    return result_str

original_string = "Hello, world!"
string_to_insert = "Python"
result = insert_in_middle(original_string, string_to_insert)
print(result)
