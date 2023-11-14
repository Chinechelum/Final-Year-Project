#1
import string
A, B, C, D, E = 'systems_engineering.txt' , 'software_engineering.txt','artificial_intelligence.txt' , 'computer_networks.txt', 'theoretical_cs.txt' 
#so we can loop through them easily
file_name = E
text = open(file_name, encoding='utf-8').read()
# print(text)

lower_case = text.lower()
# print(lower_case)

my_punctuation = string.punctuation.replace('$', '').replace('=', '').replace('-', '')
cleaned_text = lower_case.translate(str.maketrans('','',my_punctuation))
# print(cleaned_text)
#p

#2

tokenized_words = cleaned_text.split()
# print(tokenized_words)



stop_words = ["introduction", "computer", "eg", "etc", "units", "i", "me", "my", "myself", "we", "our", "ours", "ourselves", "you", "your", "yours", "yourself",
              "yourselves", "he", "him", "his", "himself", "she", "her", "hers", "herself", "it", "its", "itself",
              "they", "them", "their", "theirs", "themselves", "what", "which", "who", "whom", "this", "that", "these",
              "those", "am", "is", "are", "was", "were", "be", "been", "being", "have", "has", "had", "having", "do",
              "does", "did", "doing", "a", "an", "the", "and", "but", "if", "or", "because", "as", "until", "while",
              "of", "at", "by", "for", "with", "about", "against", "between", "into", "through", "during", "before",
              "after", "above", "below", "to", "from", "up", "down", "in", "out", "on", "off", "over", "under", "again",
              "further", "then", "once", "here", "there", "when", "where", "why", "how", "all", "any", "both", "each",
              "few", "more", "most", "other", "some", "such", "no", "nor", "not", "only", "own", "same", "so", "than",
              "too", "very", "s", "t", "can", "will", "just", "don", "should", "now"]

final_words = []
for word in tokenized_words:
    if word not in stop_words:
        final_words.append(word)

# print(final_words)

#3

content_list = []

temp = []
LOL = []
text2 = open('course_contents.txt', encoding='utf-8').read()
# with open('course_content.txt', 'r') as file:
lower_case = text2.lower()
# print(lower_case)

cleaned_text = lower_case.translate(str.maketrans('','',my_punctuation))
# print(cleaned_text)

tokenized_words = cleaned_text.split()
# print("TW\n" , tokenized_words)

for word in tokenized_words:
    if word.__contains__('$'):
        temp.append(word)
        LOL.append(temp) #LOL = List of Lists
        temp = []
    else:
        temp.append(word)

if len(temp) > 0:
    LOL.append(temp)

# print('RESULT!')
# print(len(LOL))
# print(LOL)
# print('\n')

output = []
keywords = []
for list in LOL:
    for keyword in list:
        if keyword in final_words:
            output.append(list[-1].strip('$'))
            keywords.append(keyword)
            # print('keyword: ' , keyword)
    

# print(keywords)        
# print('output: ' , output)

from collections import Counter

counter = Counter(output)
print(counter)
print('len(counter): ', len(counter))
counts = [count for x, count in counter.items()]
# for course in counter:
#     print(course, type(course))
#     if course. >= my_percentile:
#         final_courses.append(course.key)


import numpy
cutoff = numpy.percentile(counts, 70)
print('counts: ', counts)
print(cutoff)
final_courses = [f'{x}: {count}' for x, count in counter.items() if count >= cutoff]
print(len(final_courses))

import matplotlib.pyplot as plt

fig, ax1 = plt.subplots() #to make the x-axis labels more defined
# plt.bar(counter.keys(), counter.values())
ax1.bar(counter.keys(), counter.values())
plt.xlabel('courses')
plt.ylabel('similarity count')
fig.autofmt_xdate()
plt.title(file_name[:-4])

plt.show()
plt.savefig(file_name[:-4] + '.png')



