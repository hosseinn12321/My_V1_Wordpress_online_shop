# AI-Assisted WordPress Development Workflow

This repository contains the custom child theme used in my WooCommerce portfolio project.

During the development of this project, I experimented with an AI-assisted development workflow using GitHub Copilot as an AI coding assistant.

## AI-Assisted Workflow

I used the following workflow for making changes:

1. **Define the goal**

   * I first decided what I wanted to improve and described the expected behavior.

2. **Ask AI to analyze before editing**

   * I asked Copilot to inspect the existing CSS and WordPress/WooCommerce structure.
   * At this stage, I explicitly asked it not to modify any files.

3. **Review the proposed approach**

   * I reviewed the findings and decided which suggestions were actually appropriate for the project.
   * AI suggestions were treated as recommendations, not automatic decisions.

4. **Implement a small change**

   * I gave Copilot a narrowly scoped implementation task.
   * I explicitly specified which files and behaviors should remain unchanged.

5. **Review the Git diff**

   * After every change, I inspected the generated diff.
   * I checked that only the intended code had been modified.

6. **Test in the browser**

   * I manually tested the result in the actual WordPress/WooCommerce project.
   * If the result was not appropriate, I asked the AI to simplify or modify the implementation.

7. **Commit the verified change**

   * Only after reviewing and testing the change did I commit it to Git.

## Example: Product Card Improvements

One of the AI-assisted tasks was improving the WooCommerce product cards.

The final changes included:

* Grayscale product images by default.
* Smooth transition to the original color when hovering over a product card.
* A shopping-cart icon added to the existing WooCommerce product buttons.
* Existing WooCommerce button text and functionality were preserved.

The AI initially proposed a more complex expandable button interaction. After testing it in the browser, I decided that the interaction did not fit the design well enough for this version of the project.

I asked the AI to remove that behavior while keeping only the useful cart icon.

This was an important part of the workflow: **the AI generated and modified code, but the final implementation was based on my own review and testing.**

## Git Workflow

I used Git to keep the changes controlled and reversible.

The basic workflow was:

```text
Analyze
   ↓
Plan
   ↓
Implement a small change with AI
   ↓
Review git diff
   ↓
Browser test
   ↓
Commit
```

This allowed me to experiment with AI-generated code without losing control of the project.

## What I Learned

The main lesson was that using an AI coding assistant is not simply about asking it to "build something."

A useful workflow is:

* Give the AI clear constraints.
* Ask it to analyze before modifying code.
* Make small, isolated changes.
* Review generated code.
* Test the result.
* Keep changes tracked with Git.
* Reject or simplify changes that do not fit the project.

AI was used as a **development assistant**, while the implementation decisions and final validation remained under my control.
