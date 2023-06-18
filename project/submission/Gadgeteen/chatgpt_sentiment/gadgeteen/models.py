from django.db import models
from django.utils import timezone
from django.db import models
from django.utils import timezone
from django.contrib.auth.models import User


class Post(models.Model):
    owner = models.ForeignKey(User,
                              related_name='post_scraped',
                              on_delete=models.CASCADE)
    content = models.TextField()
    timestamp = models.DateTimeField(default=timezone.now)

    class Meta:
        verbose_name = 'Post'
        verbose_name_plural = 'Posts'

    def __str__(self):
        return f"Post by {self.user.username}"


class Hashtag(models.Model):
    Post = models.ForeignKey(Post,
                               related_name='hashtags',
                               on_delete=models.CASCADE)
    name = models.CharField(max_length=100, unique=True)

    class Meta:
        verbose_name = 'Hashtag'
        verbose_name_plural = 'Hashtags'

    def __str__(self):
        return self.name


class PostHashtag(models.Model):
    post = models.ForeignKey(Post, on_delete=models.CASCADE)
    hashtag = models.ForeignKey(Hashtag, on_delete=models.CASCADE)

    class Meta:
        verbose_name = 'Post Hashtag'
        verbose_name_plural = 'Post Hashtags'

    def __str__(self):
        return f"{self.post} - {self.hashtag}"


class Comment(models.Model):
    Post = models.ForeignKey(Post,
                               related_name='comments',
                               on_delete=models.CASCADE)
    content = models.TextField()
    timestamp = models.DateTimeField(default=timezone.now)

    class Meta:
        verbose_name = 'Comment'
        verbose_name_plural = 'Comments'

    def __str__(self):
        return f"Comment by {self.user.username} on {self.post}"