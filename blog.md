---
layout: simple
title: Blog
category: Blog
permalink: /blog/
pagination: 
  enabled: true
  category: blog
  per_page: 4
---

<main>
    <ul class="blog_list">
        {% for blog in paginator.posts %}
            <li>
                <a class="fade_in blog_image_thumb" style="background-image: url('{{blog.image}}')" href="{{site.baseurl}}{{blog.url}}"></a>
                <div class="blog_right_column">
                <h5 class="header_date font_small">{{ blog.date | date: "%B %e, %Y" }}</h5>
                    <a href="{{site.baseurl}}{{blog.url}}">
                        <h4 class="blog_title">{{blog.title}}</h4>
                    </a>
                    <p class="blog_description">{{blog.meta}} <a href="{{site.baseurl}}{{blog.url}}">Read More</a></p>
                </div>
            </li>
        {% endfor %}
    </ul>
    <div class="pagination">
        {% if paginator.total_pages > 1 %}
            <ul>
                {% if paginator.previous_page %}
                    <li>
                        <a href="{{ paginator.previous_page_path | prepend: site.baseurl }}">Newer</a>
                    </li>
                {% endif %}
                {% if paginator.next_page %}
                    <li>
                        <a href="{{ paginator.next_page_path | prepend: site.baseurl }}">Older</a>
                    </li>
                {% endif %}
            </ul>
        {% endif %}
    </div>
    {% include footer.html %}
</main>