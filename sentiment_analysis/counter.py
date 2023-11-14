#1
import string
file_list = ['systems_engineering.txt' , 'software_engineering.txt','artificial_intelligence.txt' , 'theoretical_cs.txt' , 'computer_networks.txt']
#so we can loop through them easily
for file_name in file_list:
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

    if file_name == file_list[0]:
        counter1 = Counter(output)
        print(counter1)

    if file_name == file_list[1]:
        counter2 = Counter(output)
        print(counter2)

    if file_name == file_list[2]:
        counter3 = Counter(output)
        print(counter3)

    if file_name == file_list[3]:
        counter4 = Counter(output)
        print(counter4)

    if file_name == file_list[4]:
        counter5 = Counter(output)
        print(counter5)

print('\n')
print(counter1 | counter2 | counter3 | counter4 | counter5)






# Counter({'cos421': 57, 'cos438': 41, 'cos415': 37, 'cos341': 36, 'cos413': 36, 'cos435': 36, 'cos441': 36, 'cos461': 36, 'cos463': 33, 'cos242': 31, 'cos333': 31, 'cos331': 29, 'cos442': 28, 'cos105': 27, 'cos434': 27, 'cos436': 27, 'cos437': 27, 'cos464': 26, 'cos203': 25, 'cos201': 23, 'cos337': 23, 'cos444': 23, 'cos202': 22, 'cos232': 21, 'cos102': 20, 'cos104': 20, 'cos471': 20, 'cos231': 18, 'cos411': 18, 'cos419': 18, 'cos304': 17, 'cos335': 17, 'cos311': 16, 'cos417': 16, 'cos204': 15, 'cos101': 14, 'cos103': 12, 'cos452': 12, 'cos351': 11, 'cos431': 10, 'cos439': 10, 'cos382': 6})