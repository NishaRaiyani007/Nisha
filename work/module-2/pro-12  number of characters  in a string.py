def count_character_frequency(input_string):
    character_count = {}

    for char in input_string:
        if char in character_count:
            character_count[char] += 1
        else:
            character_count[char] = 1

    return character_count

user_input = input("Enter a string: ")
result = count_character_frequency(user_input)

print("Character frequency:")
for char, count in result.items():
    print(f"{char}: {count}")
