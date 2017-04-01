import re

read_filename = open('exit-addresses', 'r')

lines = []

for line in read_filename:
    lines.append(line)

pat = re.compile("^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$")
write_filename = open('ip_addresses', 'w')

for line in lines:
    words = line.split()
    if (pat.match(words[1])):
        write_filename.write(words[1] + '\n')

write_filename.close()
