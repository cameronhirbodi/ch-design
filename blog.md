---
layout: simple
title: Blog
meta: Read about Cameron's take on various design related topics.
category: Blog
permalink: /blog/
---

<main >
    <ul class="blog_list">
        {% for blog in site.categories.blog %}            
            <li>
                <a class="fade_in blog_image_thumb" style="background-image: url('{{blog.images}}')" href="{{site.baseurl}}{{blog.url}}"></a>
                <h5 class="header_date font_small">{{ blog.date | date: "%B %e, %Y" }}</h5>
                <a href="{{site.baseurl}}{{blog.url}}">
                    <h4 class="blog_title">{{blog.title}}</h4>
                </a>
                <p class="blog_description">{{blog.meta}} <a href="{{site.baseurl}}{{blog.url}}">read more</a></p>
            </li>
        {% endfor %}
    </ul>
    {% include footer.html %}
</main>