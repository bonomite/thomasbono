# Nuxt Studio Guide

This guide will walk you through the process of connecting your portfolio website to Nuxt Studio and managing your content.

## 1. Connecting to Nuxt Studio

Nuxt Studio is a powerful content management system that is deeply integrated with your Nuxt project. To get started, you'll need to connect your GitHub repository to Nuxt Studio.

1.  **Go to the Nuxt Studio website:** Open your web browser and navigate to [https://nuxt.studio/](https://nuxt.studio/).
2.  **Sign in with GitHub:** Click on the "Sign up with GitHub" button. You'll be asked to authorize Nuxt Studio to access your GitHub account.
3.  **Import your repository:** Once you're logged in, you'll see an option to import a repository. Select the repository that contains your portfolio website.
4.  **Connect the project:** Follow the on-screen instructions to connect your repository. Nuxt Studio will automatically detect the Nuxt Content configuration.
5.  **Set the project URL:** In the project settings in Nuxt Studio, you'll need to set the URL of your deployed website. This will enable the live preview feature. Since we are running this locally for now, you can skip this step until you deploy the site.

## 2. Editing Your Content

Once your project is connected, you can start editing your content directly from the Nuxt Studio interface.

1.  **Open your project in Nuxt Studio:** From the Nuxt Studio dashboard, select your portfolio project.
2.  **Navigate to the collections:** On the left-hand side, you'll see the collections you defined in your `nuxt.config.ts` file: "Sites", "Design", "Motion", and "Photography".
3.  **Select a collection:** Click on one of the collections to see the list of entries. You should see the placeholder projects you created.
4.  **Edit an entry:** Click on a project to open the editor. You'll see the fields you defined in the schema (title, description, images, etc.).
5.  **Make your changes:** You can edit the text, upload new images, and add YouTube video IDs.
6.  **Save your changes:** Once you're done editing, click the "Save" button. Nuxt Studio will commit the changes directly to your GitHub repository.

## 3. Adding New Content

You can also create new portfolio items from Nuxt Studio.

1.  **Select a collection:** Go to the collection where you want to add a new project.
2.  **Click "New Entry":** You'll find a button to create a new entry.
3.  **Fill out the fields:** Fill in the title, description, and other fields for your new project.
4.  **Save the entry:** Click "Save" to add the new project to your portfolio.

## 4. Managing Media

Nuxt Studio has a built-in media library to manage your images.

1.  **Open the media library:** You can access the media library from the editor when you're adding an image.
2.  **Upload images:** You can drag and drop images from your computer to upload them.
3.  **Organize your media:** You can create folders to organize your images.

This guide should help you get started with Nuxt Studio. If you have any questions, you can refer to the official [Nuxt Content documentation](https://content.nuxt.com/docs/studio/setup).
