export class Item
{
	title;
	deleteButtonHandler;
	editButtonHandler;
	saveButtonHandler;
	isEditable;

	constructor({title, deleteButtonHandler, editButtonHandler})
	{
		this.title = String(title);
		if (typeof deleteButtonHandler === 'function')
		{
			this.deleteButtonHandler = deleteButtonHandler;
		}
		if (typeof editButtonHandler === 'function')
		{
			this.editButtonHandler = editButtonHandler;
		}
	}

	getData()
	{
		return {title: this.title};
	}

	render()
	{
		if (!this.isEditable)
		{
			return this.renderStatic();
		}
		else
		{
			return this.renderEditor()
		}
	}
	renderStatic()
	{
		const container = document.createElement('div');
		container.classList.add('item-container');
		const title = document.createElement('div');
		title.classList.add('item-title');
		title.innerText = this.title;
		container.append(title);

		const buttonsContainer = document.createElement('div');

		const editButton = document.createElement('button');
		editButton.innerText = 'Edit';
		buttonsContainer.append(editButton);
		editButton.addEventListener('click', this.handleEditButtonClick.bind(this));

		const deleteButton = document.createElement('button');
		deleteButton.innerText = 'Delete';
		buttonsContainer.append(deleteButton);
		deleteButton.addEventListener('click', this.handleDeleteButtonClick.bind(this));

		container.append(buttonsContainer);

		return container;
	}

	renderEditor()
	{
		const container = document.createElement('div');
		container.classList.add('item-container');
		const title = document.createElement('input');
		title.classList.add('item-title');
		title.value = this.title;
		container.append(title);
		const buttonsContainer = document.createElement('div');

		const saveButton = document.createElement('button');
		saveButton.innerText = 'Save';
		buttonsContainer.append(saveButton);
		saveButton.addEventListener('click', this.handleSaveButtonClick.bind(this));


		const deleteButton = document.createElement('button');
		deleteButton.innerText = 'Delete';
		buttonsContainer.append(deleteButton);
		deleteButton.addEventListener('click', this.handleDeleteButtonClick.bind(this));

		container.append(buttonsContainer);

		return container;
	}

	handleDeleteButtonClick()
	{
		if (this.deleteButtonHandler)
		{
			this.deleteButtonHandler(this);
		}
	}
	handleEditButtonClick()
	{
		if (this.editButtonHandler)
		{
			this.editButtonHandler(this);
		}
	}
	handleSaveButtonClick()
	{
		if (this.saveButtonHandler)
		{
			this.saveButtonHandler(this);
		}
	}
	openEditor()
	{
		this.isEditable = true;
	}
	closeEditor()
	{
		this.isEditable = false;
	}
}
