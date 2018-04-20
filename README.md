Add folder to project root

Add to composer.json

```json
  "repositories": [
    {
      "type": "path",
      "url": "./api-cache",
      "options": {
        "symlink": true
      }
    }
  ],
  "require": {
    "flickerleap/api-cache": "@dev"
  },
```