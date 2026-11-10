---
name: skill-creator
description: Create, improve, test, and refine reusable skills. Use this skill whenever a user wants to build a skill, edit an existing one, improve its instructions, or check whether it works reliably.
---

# Skill Creator

Help the user create or improve a reusable skill through a practical, iterative process.

## 1. Understand the goal

1. Identify what the skill should help the model do.
2. Identify when it should be used and the requests that should trigger it.
3. Determine the expected output, format, tools, and constraints.
4. Use relevant details already shared in the conversation; do not ask for them again.
5. Ask only for essential missing information; for a clear request, draft a sensible first version and suggest tests when results are objectively checkable.

## 2. Create or update the skill

1. Write the skill as a `SKILL.md` file.
2. Include YAML frontmatter with `name` and `description`.
3. Make the description explain both the skill's purpose and when it should trigger.
4. Organize the instructions with clear headings and concise steps.
5. Prefer direct, actionable language and explain why important steps matter.
6. Include examples when they make the instructions easier to follow.
7. Keep the main file focused; move long references, reusable scripts, and templates into separate folders, then link to them from `SKILL.md` with guidance on when to use them.
9. Keep the skill safe and aligned with the user's goal; preserve its existing name when updating unless asked to rename it.

## 3. Recommended folder structure

```text
skill-name/
├── SKILL.md
├── references/   # Detailed guides and background information
├── scripts/      # Reusable scripts for repeatable tasks
└── assets/       # Templates and other supporting files
```

Use only the folders the skill actually needs. Keep `SKILL.md` under 500 lines where practical.

## 4. Test the skill

1. Draft two or three realistic prompts covering common uses, varied phrasing, and a useful edge case.
3. Describe what a successful result should contain.
4. Run each prompt with the skill available.
5. When the environment supports independent runs, compare results with a baseline that does not use the skill.
6. Save prompts and results in an organized evaluation folder.
7. Check accuracy, completeness, format, instruction-following, and ease of use; measure objective requirements and review subjective quality manually.
9. Share the outputs and findings with the user and invite specific feedback.

## 5. Improve the skill

1. Read the test results and user feedback before editing.
2. Look for recurring problems rather than fixing only one example.
3. Clarify confusing instructions, remove repetition, and add examples or resources only when useful.
5. Keep instructions concise and avoid overly strict rules that make the skill brittle.
7. Rerun the tests after meaningful changes and compare the new results.
8. Stop when the user is satisfied or further changes bring no clear improvement.

## 6. Evaluate results

For each test, record:
- The prompt that was tested.
- The output produced.
- Whether the expected requirements were met.
- Any errors, omissions, or useful user feedback.

For objective tasks, use simple pass/fail checks where possible. For writing, design, and other subjective tasks, explain the strengths and weaknesses instead of forcing a numeric score.

If benchmark tools or independent agents are unavailable, test the skill directly and explain that the comparison is qualitative rather than a formal benchmark.

## 7. Improve the trigger description

1. Create realistic examples that should activate the skill and similar examples that should not.
3. Make sure the description covers natural wording, informal requests, and indirect ways users may express the task.
4. Remove vague keywords that cause unrelated requests to trigger the skill.
5. Update the description and retest it when trigger testing tools are available.

## 8. Platform and tool limitations

- Use subagents and automated benchmarks only when available; otherwise, run tests one at a time and review outputs in the conversation.
- If a browser-based review tool is unavailable, present the results directly or create a standalone review file.
- Do not claim that tests, background runs, or packaging have been completed unless they actually have.
- Use only tools and scripts that are available in the current environment.

## 9. Finalize and deliver

1. Review the final `SKILL.md` and confirm that its name and purpose are clear.
2. Check that referenced files exist and that instructions match the available tools.
3. Package the skill only when a packaging script is available and useful.
4. Provide the final files, explain how to use them, and report tests performed and remaining limitations.
6. Offer description optimization or further testing as a next step when relevant.

## Guiding principles

- Focus on the user's real goal, not on a rigid process.
- Reuse context and avoid making the user repeat information.
- Prefer clear instructions over long lists of rules.
- Make changes that improve the skill across many requests, not just one test.
- Be honest about results, limitations, and unverified assumptions.
