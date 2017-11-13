---
layout: page
title: Blog Test
category: Blog
permalink: /blog/
---

<main>
    <ul class="blog_list">
        {% for blog in site.categories.blog limit:2 %}
            <li>
                <a class="blog_thumb" href="{{site.baseurl}}{{blog.url}}">
                    <h4>{{blog.title}}</h4>
                    <h5 class="blog_date">Posted on {{ blog.date | date: "%B %e, %Y" }}</h5>
                    <img src="{{blog.thumb}}" class="fade_in">
                </a>
                <p>{{blog.meta}}</p>
                <a href="{{site.baseurl}}{{blog.url}}">
                    <h5>Continue</h5>
                </a>
            </li>
        {% endfor %}
    </ul>
</main>