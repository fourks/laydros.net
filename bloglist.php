---
layout: default
title: Blog
---

<ul class="posts">
    {% for post in site.posts %}
        <li>
        <a href="{{ post.url }}">{{ post.title }}</a>        <span>{{ post.date | date_to_string }}</span>
        </li>
    {% endfor %}
</ul>
