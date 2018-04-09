---
title: Blog
published: true
taxonomy:
    category:
        - 'cat 1'
    tag:
        - 'tag 1'
content:
    items: '@self.children'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
---

