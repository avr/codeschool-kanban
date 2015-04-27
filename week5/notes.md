### Week Five

1. Determine DB Structure
  - Board: id, name, created_by, created_at, updated_at
  - Task: id, board_id, title, description, assigned_user_id, effort, effort_increment, created_at, updated_at
  - Users: id, first_name, last_name, created_at, updated_at
  - Task + Users: task_id, user_id ?
