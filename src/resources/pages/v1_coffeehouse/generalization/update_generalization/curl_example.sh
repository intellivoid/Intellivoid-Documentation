curl --location --request POST 'ttps://api.intellivoid.net/coffeehouse/v1/image/nsfw_classification' \
--form 'access_key="<YOUR ACCESS KEY>"' \
--form 'image=@"nothing_important.jpg"' \
--form 'generalize="1"' \
--form 'generalization_id="da61676a13ebf77c3825dbad62d4cccbc14e96eb6e83f9f117eb1b41a1e53fcc"'