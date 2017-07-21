---
layout: page
title: Blog Test
permalink: /blogtest/
---

<h1>News</h1>

<ul>
    {% for blog in site.categories.blog limit:1 %}
        <li>
            <a href="{{site.baseurl}}{{blog.url}}">{{blog.title}}</a>
            <p>{{blog.meta}}</p>
        </li>
    {% endfor %}
</ul>