<template>
    <button class="btn btn-primary" data-toggle="modal" data-target="#createNVModal">
        <i class="fa fa-plus mr-2"></i>Nouveau
    </button>

    <div class="modal fade" id="createNVModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajout d'un niveau scolaire</h5>
                    <button type="button" @click="closeModal" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form @submit.prevent="soumettre" id="createForm">
                        <div class="form-group">
                            <label for="nomNiveau">Nom</label>
                            <input type="text" id="nomNiveau" class="form-control" required v-model="nomNiveauScolaire">
                            <h2>{{ nomNiveauScolaire }}</h2>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" @click="closeModal">Fermer</button>
                    <button form="createForm" type="submit" class="btn btn-success">Soumettre</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>

import { onMounted, ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';

const nomNiveauScolaire = ref("")

let createModal = ""
onMounted(() => {
    createModal = $('#createNVModal')
})

const closeModal = () => {
    $('#createNVModal').modal("hide")
    nomNiveauScolaire.value = ""
}

const soumettre = () => {
    const nom = nomNiveauScolaire.value
    const url = route("niveauscolaire.store")

    Inertia.post(url, { nom }, {
        onSuccess: (page) => {
            closeModal()
            alert("Niveau scolaire ajouté avec succès")
        },
        onError: (errors) => {
            alert("Erreur lors de l'ajout du niveau scolaire")
            console.error(errors)
        }
    })
}

</script>
