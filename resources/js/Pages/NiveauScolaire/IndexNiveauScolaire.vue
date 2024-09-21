<template>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Liste des niveaux scolaires</h1>
                </div>

            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <CreateNiveauScolaire />
                            <div class="card-tools">
                                <Pagination :links="props.niveauxScolaires.links"
                                    :prev="props.niveauxScolaires.prev_page_url"
                                    :next="props.niveauxScolaires.next_page_url" />
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <table class="table">
                                <thead class="d-flex justify-content-between align-items-center">
                                    <tr>
                                        <th>Niveaux Scolaires</th>
                                    </tr>
                                    <th style=" width: 100px">Action</th>
                                </thead>
                                <tbody>
                                    <tr v-for="niveauScolaire in props.niveauxScolaires.data">
                                        <td class="d-flex justify-content-between align-items-center">
                                            {{ niveauScolaire.nom }}
                                            <div class="d-flex" style="gap: 10px;">
                                                <button class="btn btn-info"><i class="fas fa-pen"></i></button>
                                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</template>

<script setup>
import Pagination from '@/Shared/Pagination.vue';
import CreateNiveauScolaire from './CreateNiveauScolaire.vue';

const props = defineProps({
    niveauxScolaires: Object,
})
</script>