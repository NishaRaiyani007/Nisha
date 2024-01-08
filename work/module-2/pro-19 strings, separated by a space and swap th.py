def swap_first_two_chars(str1, str2):
    if len(str1) >= 2 and len(str2) >= 2:
        new_str = str2[:2] + str1[2:] + " " + str1[:2] + str2[2:]
        return new_str
    else:
        print("Both strings should have at least two characters.")

string1 = "hello"
string2 = "world"

result = swap_first_two_chars(string1, string2)
print("Result:", result)
