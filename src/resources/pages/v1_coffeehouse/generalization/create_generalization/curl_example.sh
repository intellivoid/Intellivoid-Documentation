curl --location --request POST 'https://api.intellivoid.net/coffeehouse/v1/image/nsfw_classification' \
--form 'access_key="<YOUR ACCESS KEY>"' \
--form 'image=@"nothing_important.jpg"' \
--form 'generalize="1"' \
--form 'generalization_size="20"'