from coffeehouse import LydiaAI
lydia = LydiaAI("<API KEY>")

# Create a new chat session (Like a conversation)
session = lydia.create_session("en")

# Talk to the bot!
while True:
    output = session.think_thought(input("Input: "))
    print("Output: {0}".format(output))