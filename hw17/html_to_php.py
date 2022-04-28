
#!/usr/bin/python

import sys

if len(sys.argv) > 2:
    sys.exit("Too many arguments")

file = open(sys.argv[1], "r")
l = file.readlines()
file.close()
out = ['<?php\n\n']
for count, line in enumerate(l):

    #finds (') characters to escape
    if "'" in line:
        found = []
        for i, v in enumerate(line):
            if v == "'":
                found.append(i)

        #escapes every instance found
        while True:
            f = found[0]
            line = line[:f] + "\\" + line[f:]
            found.pop(0)
            if not found:
                break
            for i, v in enumerate(found):
                found[i] = v + 1

    #will not echo empty or broken lines
    if (line[-1] == "\n" and len(l) > 1):
        out.append("\techo '" + line[:-1] + "';\n")

    #last line may not have new line char
    elif count == (len(l) -1):
        out.append("\techo '" + line + "';\n")
out.append("\n?>")
file = open(sys.argv[1], "w")
file.writelines(out)
file.close()
