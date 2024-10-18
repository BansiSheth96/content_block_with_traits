**Requirement**: Create a Simple Content Block System Using a Trait for Laravel

**Objective**:
Develop a basic content block feature where a model (e.g., Page) can have multiple content blocks (e.g., text and images). This should be implemented using a trait, and the developer should structure the code in a way that is easy to extend later.

**Task Requirements**:

**ContentBlock Trait**:
Create a HasContentBlocks trait.
The trait should allow any model using it to manage multiple content blocks (e.g., text and image blocks).
Define a relationship within the trait that links the model to a ContentBlock model.

**ContentBlock Model**:
Create a ContentBlock model with basic fields like type (e.g., 'text', 'image') and content.
The model should have a polymorphic relationship to allow it to be attached to various models (e.g., Page, Post).

**Migration**:
Create a migration for the content_blocks table with fields such as:
id
type (for identifying text or image)
content (can be text or a path to an image)
blockable_id and blockable_type for the polymorphic relationship.

**Example Implementation**:
Apply the HasContentBlocks trait to a simple Page model.
Create a sample page where you can attach content blocks (one text and one image).

**Admin Interface**:
Add a minimal form in a Blade view to demonstrate adding content blocks (text and image) to a page.



<img width="1121" alt="demo_tech2edge" src="https://github.com/user-attachments/assets/56fac7ab-4f6f-4613-90b0-1757e71cc5eb">
