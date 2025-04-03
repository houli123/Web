import os

file_list = os.listdir('./22190494')

php_files = [file for file in file_list if file.endswith('.php')]

for i in php_files:
    with open('./22190494/' + i, 'r', encoding='utf-8') as f:
        lines = f.readlines()
    # os.remove('./22190494/' + i)
    with open('./22190494/' + i, 'w', encoding='utf-8') as f:
        for line in lines:
            modified_line = line.replace('.html', '.php')
            f.write(modified_line)
