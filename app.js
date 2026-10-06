export function calculateTotal(price, quantity) {
  return price * quantity;
}

export function validateEmail(email) {
  return email.includes("@") && email.includes(".");
}

export function validateEmailImproved(email) {
  if (typeof email !== "string") return false;
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email.trim());
}

export function addTask(tasks, title) {
  if (!title.trim()) return tasks;
  return [
    ...tasks,
    {
      id: Date.now(),
      title,
      completed: false
    }
  ];
}