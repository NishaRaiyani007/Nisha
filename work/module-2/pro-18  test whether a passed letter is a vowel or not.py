def is_vowel(letter):
    vowels = "aeiouAEIOU"
    return letter in vowels

user_input = input("Enter a letter: ")

if len(user_input) == 1 and user_input.isalpha():
    if is_vowel(user_input):
        print(f"The letter {user_input} is a vowel.")
    else:
        print(f"The letter {user_input} is not a vowel.")
else:
    print("Please enter a valid single letter.")
